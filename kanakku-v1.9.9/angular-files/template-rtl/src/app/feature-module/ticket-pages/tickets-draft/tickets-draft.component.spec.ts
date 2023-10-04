import { ComponentFixture, TestBed } from '@angular/core/testing';

import { TicketsDraftComponent } from './tickets-draft.component';

describe('TicketsDraftComponent', () => {
  let component: TicketsDraftComponent;
  let fixture: ComponentFixture<TicketsDraftComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ TicketsDraftComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(TicketsDraftComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
