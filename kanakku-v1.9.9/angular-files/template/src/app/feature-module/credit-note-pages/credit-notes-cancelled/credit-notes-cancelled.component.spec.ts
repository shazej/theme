import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CreditNotesCancelledComponent } from './credit-notes-cancelled.component';

describe('CreditNotesCancelledComponent', () => {
  let component: CreditNotesCancelledComponent;
  let fixture: ComponentFixture<CreditNotesCancelledComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CreditNotesCancelledComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(CreditNotesCancelledComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
